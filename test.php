<?php
/**
 * Timed Test
 *
 * Usage:
 *   php test.php [host]
 *
 * @package VorpalBunny
 * @author Gavin M. Roy <gmr@myyearbook.com>
 */

require_once( "vorpalbunny.php" );

// Allow a command line override of localhost
if ( count( $argv ) > 1 )
{
  $broker = $argv[1];
}
else
{
  $broker = 'localhost';
}

// Create our VorpalBunny object
$vb = new VorpalBunny( $broker );

// Publish to our rabbitmq broker
if ( $vb->publish( "", "test", "Hello World!" ) )
{
  print "Message Published\n";
}
else
{
  print "Error delivering message.\n";
}
