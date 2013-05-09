# Silverstripe External Assets

Allows you to access static files as ~~well as javascript and CSS~~ from external (sub)-domains.

## How-To

Use `ExternalImage` instead of `Image` in your DataObjects.

Set up your `config.yml` with the following options:

- __domain_name__: The domain over which the files should be available.
- __external_name__: The subdomain under which the files are accessible.  
The final URL is assembled with the SilverStripe domain.
- __external_points_to_assets__: Indicates if the domain points to the assets folder, and it can be removed from the URL.

```
---
Name: SubdomainAssets
---
ExternalAssetsConfig:
  external_name: 'static'
  external_points_to_assets: true
```

```
---
Name: ExternalAssets
---
ExternalAssetsConfig:
  domain_name: 'bar.foo.domain'
  external_points_to_assets: false
```

---

## Todo

- add support for regular files
- add support for javascript and css files

---

## Have fun!