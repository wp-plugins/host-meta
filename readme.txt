=== host-meta ===
Contributors: pfefferle
Donate link: http://14101978.de
Tags: OpenID, XRD, well-known, XML, Discovery, host-meta, Webfinger
Requires at least: 3.0.5
Tested up to: 3.5.1
Stable tag: 1.0.0

This plugin provides a host-meta - file for WordPress (RFC: http://tools.ietf.org/html/rfc6415).

From the RFC:

   Web-based protocols often require the discovery of host policy or
   metadata, where host is not a single resource but the entity
   controlling the collection of resources identified by URIs with a
   common host as defined.  While these protocols have a
   wide range of metadata needs, they often define metadata that is
   concise, has simple syntax requirements, and can benefit from storing
   its metadata in a common location used by other related protocols.

   Because there is no URI or a resource available to describe a host,
   many of the methods used for associating per-resource metadata (such
   as HTTP headers) are not available.  This often leads to the
   overloading of the root HTTP resource (e.g. 'http://example.com/')
   with host metadata that is not specific to the root resource (e.g. a
   home page or web application), and which often has nothing to do it.

   This memo registers the "well-known" URI suffix 'host-meta' in the
   Well-Known URI Registry established by,
   and specifies a simple, general-purpose metadata document for hosts,
   to be used by multiple Web-based protocols.

== Changelog ==
= 1.0.0 =
* refactoring
* deprecated well-known plugin
= 0.4.3 =
* implemented new well-known hooks
= 0.4.2 =
* some changes to support http://unhosted.org
= 0.4.1 =
* fixed ostatus compatibility issue: http://status.net/open-source/issues/3235
= 0.4 =
* added jrd support
= 0.3 =
* implements the new well-known hook
= 0.2 =
* Initial release

== Installation ==

1. You have to download and install the `/.well-known/`-plugin first: http://wordpress.org/extend/plugins/well-known/
2. Then you have to upload the `host-meta`-folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the *Plugins* menu in WordPress
4. ...and that's it :)

== Frequently Asked Questions ==

soon...