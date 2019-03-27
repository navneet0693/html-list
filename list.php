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
$arr = new \ArrayIterator($list);
  while ($arr->valid())
  {
    if(is_array($arr->current()))
    {
      print_iterative($arr->current());
    }
    else
    {
      switch ($arr->current()) {
        case 'ol':
          echo "<ol>";
          break;
        case 'ul':
          echo "<ul>";
        break;
        default:
          echo $arr->current();
      }
    }
    $arr->next();
  }
}

// Print list.
print_iterative($list);
