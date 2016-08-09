<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Repository namespace
    |--------------------------------------------------------------------------
    |
    | The namespace for the repository classes.
    |
    */
    'repository_namespace' => 'Sco\Repositories',

    /*
    |--------------------------------------------------------------------------
    | Repository path
    |--------------------------------------------------------------------------
    |
    | The path to the repository folder.
    |
    */
    'repository_path' => 'app' . DIRECTORY_SEPARATOR . 'Repositories',

    /*
    |--------------------------------------------------------------------------
    | Criteria namespace
    |--------------------------------------------------------------------------
    |
    | The namespace for the criteria classes.
    |
    */
    'criteria_namespace' => 'Sco\Repositories\Criteria',

    /*
    |--------------------------------------------------------------------------
    | Criteria path
    |--------------------------------------------------------------------------
    |
    | The path to the criteria folder.
    |
    */
    'criteria_path'=> 'app' . DIRECTORY_SEPARATOR . 'Repositories' . DIRECTORY_SEPARATOR . 'Criteria',

    /*
    |--------------------------------------------------------------------------
    | Model namespace
    |--------------------------------------------------------------------------
    |
    | The model namespace.
    |
    */
    'model_namespace' => 'Sco\Models',

    /**
     * Cache Config
     */
    'cache' => [
        /**
         * Cache Minutes
         * Time of expiration cache
         */
        'minutes' => 30,

        /**
         * Cache Repository
         *
         * Instance of Illuminate\Contracts\Cache\Repository
         *
         */
        'repository' => 'cache',

        /*
          |--------------------------------------------------------------------------
          | Cache Clean Listener
          |--------------------------------------------------------------------------
          |
          |
          |
          */
        'clean'      => [

            /*
              |--------------------------------------------------------------------------
              | Enable clear cache on repository changes
              |--------------------------------------------------------------------------
              |
              */
            'enabled' => true,

            /*
              |--------------------------------------------------------------------------
              | Actions in Repository
              |--------------------------------------------------------------------------
              |
              | created : Clear Cache on create Entry in repository
              | updated : Clear Cache on update Entry in repository
              | deleted : Clear Cache on delete Entry in repository
              |
              */
            'on'      => [
                'created' => true,
                'updated' => true,
                'deleted' => true,
            ]
        ],


        'params'     => [
            /**
             * Skip Cache Params
             *
             * Ex: http://local.lo/?search=lorem&skipCache=true
             */
            'skipCache' => 'skipCache'
        ],
    ],
];