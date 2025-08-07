<?php
// API Specification for Data-Driven Web App Dashboard

// Configuration
const API_VERSION = '1.0.0';
const API_ENDPOINT = '/api';

// Database Connection
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'nxhb_dashboard';

// API Endpoints
$endpoints = [
    // Dashboard Overview
    'GET /' => [
        'description' => 'Get dashboard overview data',
        'params' => [],
        'response' => [
            'widgets' => [
                'traffic' => [
                    'label' => 'Traffic',
                    'value' => 'integer'
                ],
                'sales' => [
                    'label' => 'Sales',
                    'value' => 'integer'
                ],
                'revenue' => [
                    'label' => 'Revenue',
                    'value' => 'float'
                ]
            ]
        ]
    ],

    // Traffic Data
    'GET /traffic' => [
        'description' => 'Get traffic data',
        'params' => [
            'date_range' => [
                'type' => 'string',
                'description' => 'Date range in YYYY-MM-DD format (e.g. 2022-01-01:2022-01-31)'
            ]
        ],
        'response' => [
            'traffic_data' => [
                'labels' => [
                    'date',
                    'unique_visitors',
                    'page_views'
                ],
                'data' => [
                    [
                        'date' => '2022-01-01',
                        'unique_visitors' => 100,
                        'page_views' => 500
                    ],
                    [
                        'date' => '2022-01-02',
                        'unique_visitors' => 120,
                        'page_views' => 600
                    ]
                ]
            ]
        ]
    ],

    // Sales Data
    'GET /sales' => [
        'description' => 'Get sales data',
        'params' => [
            'date_range' => [
                'type' => 'string',
                'description' => 'Date range in YYYY-MM-DD format (e.g. 2022-01-01:2022-01-31)'
            ]
        ],
        'response' => [
            'sales_data' => [
                'labels' => [
                    'date',
                    'sales_amount',
                    'orders'
                ],
                'data' => [
                    [
                        'date' => '2022-01-01',
                        'sales_amount' => 1000.0,
                        'orders' => 10
                    ],
                    [
                        'date' => '2022-01-02',
                        'sales_amount' => 1200.0,
                        'orders' => 12
                    ]
                ]
            ]
        ]
    ],

    // Revenue Data
    'GET /revenue' => [
        'description' => 'Get revenue data',
        'params' => [
            'date_range' => [
                'type' => 'string',
                'description' => 'Date range in YYYY-MM-DD format (e.g. 2022-01-01:2022-01-31)'
            ]
        ],
        'response' => [
            'revenue_data' => [
                'labels' => [
                    'date',
                    'revenue'
                ],
                'data' => [
                    [
                        'date' => '2022-01-01',
                        'revenue' => 500.0
                    ],
                    [
                        'date' => '2022-01-02',
                        'revenue' => 600.0
                    ]
                ]
            ]
        ]
    ]
];

// API Response Format
const API_RESPONSE_FORMAT = 'json';

// Error Handling
const API_ERROR_FORMAT = 'json';

// API Documentation
const API_DOCS = '/docs';

?>