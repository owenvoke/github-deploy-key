# github-deploy-key

A CLI to generate and add Github SSH deploy keys to repos.

[![Packagist](https://img.shields.io/packagist/v/pxgamer/github-deploy-key.svg)](https://packagist.org/p/pxgamer/github-deploy-key)
[![Packagist](https://img.shields.io/packagist/l/pxgamer/github-deploy-key.svg)](https://opensource.org/licenses/mit-license)

## Usage

The binary:  
When installing through Composer globally, it should include the `gdk` binary in your path.

Adding a new deploy key:  
`gdk add [-t|--token [TOKEN]] [--] <repositories> (<repositories>)`

## Example usage

```bash
~/$ gdk add -t d3v3l0p3r1234567890abcdefghijklmnopqrstu pxgamer/github-deploy-key
Deploy keys added successfully to the following repositories:
-------------------------------------------------------------

-----BEGIN RSA PRIVATE KEY-----
MIIJKQIBAAKCAg...
-----END RSA PRIVATE KEY-----

Private key for: pxgamer/github-deploy-key
Public key added to: https://github.com/pxgamer/github-deploy-key/settings/keys
```