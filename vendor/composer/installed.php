<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'behat/behat' => array(
            'pretty_version' => 'v3.4.3',
            'version' => '3.4.3.0',
            'reference' => 'd60b161bff1b95ec4bb80bb8cb210ccf890314c2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/behat',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/gherkin' => array(
            'pretty_version' => 'v4.9.0',
            'version' => '4.9.0.0',
            'reference' => '0bc8d1e30e96183e4f36db9dc79caead300beff4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/gherkin',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink' => array(
            'pretty_version' => 'v1.10.0',
            'version' => '1.10.0.0',
            'reference' => '19e58905632e7cfdc5b2bafb9b950a3521af32c5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/mink',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-browserkit-driver' => array(
            'pretty_version' => 'v2.1.0',
            'version' => '2.1.0.0',
            'reference' => 'd2768e6c17b293d86d8fcff54cbb9e6ad938fee1',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../behat/mink-browserkit-driver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-extension' => array(
            'pretty_version' => '2.3.1',
            'version' => '2.3.1.0',
            'reference' => '80f7849ba53867181b7e412df9210e12fba50177',
            'type' => 'behat-extension',
            'install_path' => __DIR__ . '/../behat/mink-extension',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-goutte-driver' => array(
            'pretty_version' => 'v2.0.0',
            'version' => '2.0.0.0',
            'reference' => 'a60fba46520c17d39b839151831cbc0710764b56',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../behat/mink-goutte-driver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-selenium2-driver' => array(
            'pretty_version' => 'v1.6.0',
            'version' => '1.6.0.0',
            'reference' => 'e5f8421654930da725499fb92983e6948c6f973e',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../behat/mink-selenium2-driver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/transliterator' => array(
            'pretty_version' => 'v1.5.0',
            'version' => '1.5.0.0',
            'reference' => 'baac5873bac3749887d28ab68e2f74db3a4408af',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/transliterator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'container-interop/container-interop' => array(
            'pretty_version' => '1.2.0',
            'version' => '1.2.0.0',
            'reference' => '79cbf1341c22ec75643d841642dd5d6acd83bdb8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../container-interop/container-interop',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'fabpot/goutte' => array(
            'pretty_version' => 'v4.0.2',
            'version' => '4.0.2.0',
            'reference' => 'f51940fbe0db060bc4fc0b3f1d19bc4ff3054b17',
            'type' => 'application',
            'install_path' => __DIR__ . '/../fabpot/goutte',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'instaclick/php-webdriver' => array(
            'pretty_version' => '1.4.15',
            'version' => '1.4.15.0',
            'reference' => 'ed8f7741a0952db42686aae0780a0935138a7cf8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instaclick/php-webdriver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'masterminds/html5' => array(
            'pretty_version' => '2.7.6',
            'version' => '2.7.6.0',
            'reference' => '897eb517a343a2281f11bc5556d6548db7d93947',
            'type' => 'library',
            'install_path' => __DIR__ . '/../masterminds/html5',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'php-http/async-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '*',
            ),
        ),
        'php-http/client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '*',
            ),
        ),
        'psr/container' => array(
            'pretty_version' => '1.1.2',
            'version' => '1.1.2.0',
            'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/container-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'reference' => 'ef29f6d262798707a9edd554e2b82517ef3a9376',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'symfony/browser-kit' => array(
            'pretty_version' => 'v6.1.3',
            'version' => '6.1.3.0',
            'reference' => '2e3b6a4406c2af963c634d7bd0457402b67dcc56',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/browser-kit',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/class-loader' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'reference' => 'a22265a9f3511c0212bf79f54910ca5a77c0e92c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/class-loader',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/config' => array(
            'pretty_version' => 'v4.4.9',
            'version' => '4.4.9.0',
            'reference' => '395f6e09e1dc6ac9c1a5eea3b7f44f7a820a5504',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/config',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/console' => array(
            'pretty_version' => 'v4.4.47',
            'version' => '4.4.47.0',
            'reference' => '4f40012db8d55c956406890b5720f686fee7f7b7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/console',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/css-selector' => array(
            'pretty_version' => 'v6.1.3',
            'version' => '6.1.3.0',
            'reference' => '0dd5e36b80e1de97f8f74ed7023ac2b837a36443',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/css-selector',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/dependency-injection' => array(
            'pretty_version' => 'v4.4.44',
            'version' => '4.4.44.0',
            'reference' => '25502a57182ba1e15da0afd64c975cae4d0a1471',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/dependency-injection',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.1.1',
            'version' => '3.1.1.0',
            'reference' => '07f1b9cc2ffee6aaafcf4b710fbc38ff736bd918',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/dom-crawler' => array(
            'pretty_version' => 'v6.1.4',
            'version' => '6.1.4.0',
            'reference' => '8cb4c6e6c8d30c26f70529ed5e50d79a09576c0c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/dom-crawler',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => array(
            'pretty_version' => 'v4.4.44',
            'version' => '4.4.44.0',
            'reference' => '1e866e9e5c1b22168e0ce5f0b467f19bba61266a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => array(
            'pretty_version' => 'v1.1.13',
            'version' => '1.1.13.0',
            'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.1',
            ),
        ),
        'symfony/filesystem' => array(
            'pretty_version' => 'v5.4.13',
            'version' => '5.4.13.0',
            'reference' => 'ac09569844a9109a5966b9438fc29113ce77cf51',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/filesystem',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/http-client' => array(
            'pretty_version' => 'v6.1.6',
            'version' => '6.1.6.0',
            'reference' => 'c8c887f4813370550147afd27d9eb8a8523e53b2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-client',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/http-client-contracts' => array(
            'pretty_version' => 'v3.1.1',
            'version' => '3.1.1.0',
            'reference' => 'fd038f08c623ab5d22b26e9ba35afe8c79071800',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-client-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/http-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '3.0',
            ),
        ),
        'symfony/mime' => array(
            'pretty_version' => 'v6.1.6',
            'version' => '6.1.6.0',
            'reference' => '5ae192b9a39730435cfec025a499f79d05ac68a3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/mime',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-idn' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-idn',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php72' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php72',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php73' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'e440d35fa0286f77fb45b79a03fedbeda9307e85',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php73',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/service-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'symfony/translation' => array(
            'pretty_version' => 'v4.4.47',
            'version' => '4.4.47.0',
            'reference' => '45036b1d53accc48fe9bab71ccd86d57eba0dd94',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/translation',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/translation-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/translation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/translation-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'symfony/yaml' => array(
            'pretty_version' => 'v4.4.45',
            'version' => '4.4.45.0',
            'reference' => 'aeccc4dc52a9e634f1d1eebeb21eacfdcff1053d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/yaml',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
