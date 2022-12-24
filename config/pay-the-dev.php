<?php

return [
    /**
     * Whether or not to use PayTheDev
     */
    'switch' => env('PTT_ENABLE', false),

    /**
     * View to show
     */
    'ptt_view' => env('PTT_VIEW_NAME', null),
    
    /**
     * Developer Website
     */
    'developer_website' => env('PTT_DEVELOPER_WEBSITE', 'https://theadeyemiolayinka.netlify.app'),

];

?>