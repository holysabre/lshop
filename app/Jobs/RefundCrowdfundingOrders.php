<?php

namespace App\Jobs;

use App\Models\CrowdfundingProduct;
use App\Services\OrderService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class RefundCrowdfundingOrders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $crowdfunding;

    public function __construct(CrowdfundingProduct $crowdfunding)
    {
        $this->crowdfunding = $crowdfunding;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // 如果众筹的状态不是失败则不执行退款，原则上不会发生，这里只是增加健壮性
        if($this->crowdfunding->status !== CrowdfundingProduct::STATUS_FAIL){
            return;
        }

        $orderService = app(OrderService::class);
        Order::query()
            ->where('type', Order::TYPE_CROWDFUNDING)
            ->whereNotNull('paid_at')
            ->whereHas('items', function($query) {
                // 包含了当前商品
                $query->where('product_id', $this->crowdfunding->product_id);
            })
            ->get()->each(function (Order $order) use($orderService) {
                // todo 调用退款逻辑
                $orderService->refundOrder($order);
            });
    }
}
