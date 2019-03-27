<?php

$list = [
  'type' => 'ol',
  'items' => [
    [
      'text' => 'India',
      'child' => [
        'type' => 'ol',
        'items' => [
          [
            'text' => 'Maharashtra',
            'child' => [
              'type' => 'ul',
              'items' => [
                [
                  'text' => 'Pune',
                ],
                [
                  'text' => 'Nashik',
                ],
              ],
            ],
          ],
          [
            'text' => 'Karnataka',
          ],
          [
            'text' => 'Rajasthan',
            'child' => [
              'type' => 'ul',
              'items' => [
                [
                  'text' => 'Pushkar',
                ],
              ],
            ],
          ],
        ]
      ]
    ],
    [
      'text' => 'US',
      'child' => [
        'type' => 'ul',
        'items' => [
          [
            'text' => 'New York',
          ],
          [
            'text' => 'Kansas',
          ],
        ],
      ],
    ],
    [
      'text' => 'Pakistan',
      'child' => [
        'type' => 'ol',
        'items' => [
          [
            'text' => 'Balochistan',
          ],
          [
            'text' => 'Punjab',
            'child' => [
              'type' => 'ul',
              'items' => [
                [
                  'text' => 'Lahore',
                ],
                [
                  'text' => 'Faisalabad',
                ],
              ],
            ],
          ],
        ],
      ],
    ]
  ],
];

/**
 * Prints an html list iteratively.
 *
 * @param $list
 *
 * @return void
 */
function print_iterative($list) {
  // Code.
}

// Print list.
print_iterative($list);
