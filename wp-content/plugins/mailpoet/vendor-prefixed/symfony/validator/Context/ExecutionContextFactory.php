<?php
namespace MailPoetVendor\Symfony\Component\Validator\Context;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Translation\TranslatorInterface as LegacyTranslatorInterface;
use MailPoetVendor\Symfony\Component\Validator\Validator\ValidatorInterface;
use MailPoetVendor\Symfony\Contracts\Translation\TranslatorInterface;
class ExecutionContextFactory implements ExecutionContextFactoryInterface
{
 private $translator;
 private $translationDomain;
 public function __construct($translator, string $translationDomain = null)
 {
 if (!$translator instanceof LegacyTranslatorInterface && !$translator instanceof TranslatorInterface) {
 throw new \TypeError(\sprintf('Argument 1 passed to "%s()" must be an instance of "%s", "%s" given.', __METHOD__, TranslatorInterface::class, \is_object($translator) ? \get_class($translator) : \gettype($translator)));
 }
 $this->translator = $translator;
 $this->translationDomain = $translationDomain;
 }
 public function createContext(ValidatorInterface $validator, $root)
 {
 return new ExecutionContext($validator, $root, $this->translator, $this->translationDomain);
 }
}
