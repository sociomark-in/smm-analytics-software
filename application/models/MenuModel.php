<?php

class MenuModel extends CI_Model
{
    public function load_menu(){
        $menu = [
            'pages' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'All Channels',
                'dropdown' => [
                    'facebook' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Facebook",
                        'url' => 'pages/facebook/all'
                    ],
                    'instagram' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Instagram",
                        'url' => 'accounts/instagram/all'
                    ]
                ]
            ],
            'users' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Users',
                'dropdown' => [
                    'customers' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Customers",
                        'url' => 'customers'
                    ],
                    'vendors' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "Vendors",
                        'url' => 'vendors'
                    ]
                ]
            ],
            'categories' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Categories",
                'url' => 'categories'
            ],
            'products' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Products",
                'url' => 'products'
            ],
            'reviews' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Reviews",
                'url' => 'reviews'
            ],
            'brands' => [
                'enable' => true,
                'type' => 'single',
                'text' => "Brands",
                'url' => 'brands'
            ],
            'orders-invoices' => [
                'enable' => true,
                'type' => 'dropdown',
                'text' => 'Orders & Invoices',
                'dropdown' => [
                    'orders' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Orders",
                        'url' => 'orders'
                    ],
                    'invoices' => [
                        'enable' => true,
                        'type' => 'single',
                        'text' => "All Invoices",
                        'url' => 'invoices'
                    ]
                ]
            ],
        ];
        return json_encode($menu);
    }
    
}
