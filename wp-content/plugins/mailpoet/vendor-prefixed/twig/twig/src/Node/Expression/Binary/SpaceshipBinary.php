<?php
namespace MailPoetVendor\Twig\Node\Expression\Binary;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class SpaceshipBinary extends AbstractBinary
{
 public function operator(Compiler $compiler)
 {
 return $compiler->raw('<=>');
 }
}
