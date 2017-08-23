<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Remote Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default connection that will be used for SSH
    | operations. This name should correspond to a connection name below
    | in the server list. Each connection will be manually accessible.
    |
    */
    'default' => 'My Server',
    /*
    |--------------------------------------------------------------------------
    | Remote Server Connections
    |--------------------------------------------------------------------------
    |
    | These are the servers that will be accessible via the SSH task runner
    | facilities of Laravel. This feature radically simplifies executing
    | tasks on your servers, such as deploying out these applications.
    |
    */
    'connections' => [
        'production' => [
            'host'      => '127.0.0.1',
            'username'  => 'root',
            'password'  => 'Kbl00m19',
            'key'       => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC0IgA78435E6mZ0I936LpjmNv1eVuTRkhpRZHEl7dKQczqsCbkLGtYtMvSu3GORLZZJCzOU2WCQtsd2LdMb/TLVVecmGhNSKC41BqniD2jME41P6dwg8l36xiyw9NJQ3GCSj6uaFShd8MJ94+/0hVj0s5lhceuAoso6YlyCvQEWivd9CTgEnGwFMSdryq+IwiezurrI5pKTJ4alTfxaoHzOZF78auaAGYnpyCX9mg9iwkimKS8LFin/GxRKkanKH2fLFGr/S1Ao6KSpnZIkW2iDN+InlOHnGLnPh/QYU37oG79fltzRd7YLwqtuNpf+GU0ReJS+IfzngSfw+gJR5YR worker@envoyer.io',
            'keytext'   => '',
            'keyphrase' => '',
            'agent'     => '',
            'timeout'   => 10,
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Remote Server Groups
    |--------------------------------------------------------------------------
    |
    | Here you may list connections under a single group name, which allows
    | you to easily access all of the servers at once using a short name
    | that is extremely easy to remember, such as "web" or "database".
    |
    */
    'groups' => [
        'web' => ['production'],
    ],
];
