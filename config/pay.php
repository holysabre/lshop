<?php

return [
    'alipay' => [
        'app_id'         => '2016080600180881',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn3bpy2YWuNx4reIqb8GJIKKj31aDjxaHeogqiNtAiqsttWflZRcq2iXzBBZjCo4sjdwSs+3HQoMFVaRhn+65Fptq/0jqTjGjmLYQCS6tI8YkDyi2MmKUF4KoV2q+/LR3DVIvv2JJHHQFyIE9FJ3iYNDAU6Y0g6me1nQROYdCN/B4i0n301z726s6FInPWXnGgKhU+wjdQ2j6qUmi/QUUXgjDZHB2xPxxkAw3tB9oxgBizLAysM61+QySwEW2xU57ZC3Tsaw5SK3oYEgFQA86YneWBfu8inPzHFw38BF1f0uPP2jVLOab4wU8JCofFkT0DIA9sazGTW5jFB13COXYywIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAmhQSZysokO4xjm7fQLpJ38ZoW2ByGSmJN+Kh8RVtBegpP271a1iTbmpMnNkD1iSZ0kZxMvtenIF0Az1IvHsMHnlnMREMctzxA+BfzaLJ04gjRquEp/EKAej9bVW3rNXU9m6+cUJx5JWAHGsjbwTBSyDdWmvLHeVxkjSVXUwHOzcvp62QGE1TbNdysZvlrtkMAIPAL+OD5i1ENaTFSTzHHi3NJD3bnO8hjz9pzDPYCni8bp4EHvlrmLW9Joz+1u8F7/HJVtsOh6aA0bfSYL4JQJLqitY2bd/xPkktBzVJi5pcibcd2l2RhZrcp0Agyx+zh7pkVUoFT9wJ+32Z9Py5LQIDAQABAoIBAHGSB/qZ2l3x5P9bBB6e8eMLSVLJZXDcp/NUjw+4PlNTTEwgiq/ka0/A9NXMNMK82dEf8UKl/JgZ55yXqKydelJgJEsLiQSFjPXRhmx56JCOUYo+1RpBVqIPzfWwcCHqv/4hpSiw1GisNfE8m7Kya5PoFqEWwXI49JzTO6G4b8AaAq9rpVQ9iFCeKzh/TnbIN2WDjbTGjJuFiE+dzqwrgGQgeklSvR68jiD3lwOc8DeZ5Tt7jHE0pDnuh2pMphnA0wKjdkpH5VWBiKNE/FGYqv7DjeluJSAMQ3+e6riHsIvrKBDcvNjfy9Mjrs55YBciVq0yz0Emj1f12cdMsfmazjUCgYEA9xTqw7s7iasxXciy8qguKi7E0l9eh0X+Xn0kd4sq1imh0HYe3m1sns8solEOMj+AoHnY4ekZ2yjvuQPvZ+kXBmw4VA4R7WLnX9ZOedIFBUfU9lglmAGZHkM6RvVDZ4pBiLSMPpL65fxuf7hDLxStAi0MCNQsuHtIcBXY+WIQ1YcCgYEAn6PJSUAwMtqnfKSOFH3VF1hXWwYMOfoZGKnWRmMP2FCZSVO2ZZ0ivsujYpbY9H3w9LIli/ZI7j/iPpKyyQMOy6mSDqQOke9GpTRBWm4whSCV6GK5RnIpirZ96jOH0Gx+G+5zvw4VoN+rBRgyDra8uhnKzBCM0Ee7excyFBLXKKsCgYEAj740giB4F7RnqObs7GzZRqMk0Dq5dLtMq83kHEPzbNqVkABYHxDL42wlzFyZhLQa8cFRYsRIzY54QEvAyNP7GDp3Xrc8yL0EXGYCC68aSqMqixJm9JLhcJCt48AmMaNmUtCu0myR2KDN7DHXrBk8OYrZeH1vcvgOAV9EdnkN0BsCgYB3KRO7qL0RiKMSZ+ZiJ1cjON7j48zGjgejoEqAebs/FVKGKIVyretcjbakhcLmJQfyLvPV2H2x0V+4o1nur2ig3y9V3GG/zuJluG676JoxFRSwxNhVXCvkDbpJUjOjgQhVIxWk3AeK8MnAYMIkt4SCSXRWBFiHs7Oe+r53u2R9RwKBgG02p4VDEUyowChv1I28d2L0+y1azLOx+jUuYLSaIEKX5k4WsMeE8tUpusyeq0roGYJGlovDTwWiFqJX1cvdV0u9cZaKYMdsiulEX2Vsti9HqUi8a48PFWL9PbgQpBEJse287fsOgpsQbN8BC5Wgec74iZofSstAj7HKom+Q+YdD',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
