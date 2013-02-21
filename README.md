CompassBundle
=============


configure image_paths in global config.yml:

~~~
parameters:
    assetic.filter.compass.images_dir: %kernel.root_dir%/../web/images
    assetic.filter.compass.http_path:  /images
~~~

configure yui_compressor:

~~~
parameters: 
    yui_compressor: /usr/share/yui-compressor/yui-compressor.jar   # path to yui compressor
~~~

configure assetic:

~~~
assetic:
    bundles: [YourBundle]  # use your bundle name to be tracked by assetic
    filters:
        compass: ~         # enables compass filter
        yui_css:
            jar: %yui_compressor%     # enables css compressor
~~~
