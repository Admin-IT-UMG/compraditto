<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Events_EventObject implements Swift_Events_Event
{
 private $source;
 private $bubbleCancelled = \false;
 public function __construct($source)
 {
 $this->source = $source;
 }
 public function getSource()
 {
 return $this->source;
 }
 public function cancelBubble($cancel = \true)
 {
 $this->bubbleCancelled = $cancel;
 }
 public function bubbleCancelled()
 {
 return $this->bubbleCancelled;
 }
}
