<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
interface Swift_Events_SendListener extends Swift_Events_EventListener
{
 public function beforeSendPerformed(Swift_Events_SendEvent $evt);
 public function sendPerformed(Swift_Events_SendEvent $evt);
}
