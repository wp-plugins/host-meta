<?php
/*
Plugin Name: host-meta
Plugin URI: http://notizblog.org/
Description: Host Metadata for WordPress (IETF-Draft: http://tools.ietf.org/html/draft-nottingham-site-meta-01)
Version: 0.3
Author: Matthias Pfefferle
Author URI: http://notizblog.org/
*/

//
add_action('well-known', array('HostMetaPlugin', 'printHostMeta'));

/**
 * the host-meta class
 *
 * @author Matthias Pfefferle
 */
class HostMetaPlugin {
  /**
   * prints the host-meta xrd file
   */
  function printHostMeta($query) {
    if ($query == "host-meta") {
      header('Content-Type: application/xrd+xml; charset=' . get_option('blog_charset'), true);
    
      echo "<?xml version='1.0' encoding='".get_option('blog_charset')."'?>\n";
      echo "<XRD xmlns='http://docs.oasis-open.org/ns/xri/xrd-1.0'\n";
      echo "     xmlns:hm='http://host-meta.net/xrd/1.0'";
        do_action('host_meta_ns');
      echo ">\n";
      echo "  <hm:Host>".parse_url(get_option('siteurl'), PHP_URL_HOST)."</hm:Host>\n";
        do_action('host_meta_xrd');
      echo "\n</XRD>";
    }
  }
}
?>