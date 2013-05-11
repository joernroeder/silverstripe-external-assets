# Silverstripe External Assets

Allows you to access static files as ~~well as javascript and CSS~~ from external (sub)-domains.

## How-To

1. Use `ExternalImage` instead of `Image` in your DataObjects and Relations.

2. Set up your external domain in your hosting setup and point to the assets folder or silverstripes root directory.

2. Set up your `config.yml` with the following options:

### config.yml

- __domain_name__: The domain over which the files should be available.
- __external_name__: The subdomain under which the files are accessible.  
The final URL is assembled with the SilverStripe domain.
- __external_points_to_assets__: Indicates if the domain points to the assets folder, and it can be removed from the URL.

### Assets via sub-domain

With the following Configuration your assets will be loaded from a sub-domain: `protocol://static.yourdomain.com/imageName.jpg`

```
---
Name: SubdomainAssets
---
ExternalAssetsConfig:
  external_name: 'static'
  external_points_to_assets: true
```

### Assets via external domain

To load the assets from a different domain, the following configuration can be used and the file will be accessible at the following URL: `protocol://bar.foo.domain/assets/imageName.jpg`

```
---
Name: ExternalAssets
---
ExternalAssetsConfig:
  domain_name: 'bar.foo.domain'
  external_points_to_assets: false
```

## Todo


- add support for regular files
- add support for javascript and css files


## Have fun!