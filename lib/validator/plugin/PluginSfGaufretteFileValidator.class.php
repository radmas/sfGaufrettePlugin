<?php
/**
 * This file declare the PluginSfGaufretteFileValidator class.
 *
 * @package sfGaufrettePlugin
 * @subpackage lib.validator.plugin
 * @author Julien Muetton <julien_muetton@carpe-hora.com>
 * @copyright (c) Carpe Hora SARL 2012
 * @since 2012-01-26
 */

/**
 * gaufrette enabled file validator.
 *
 * adds following options to default sfValidatorFile :
 * - gaufrette : the gaufrette object to use
 *
 * path option is unused.
 */
class PluginSfGaufretteFileValidator extends sfValidatorFile
{
  public function configure($options = array(), $messages = array())
  {
    $this->addRequiredOption('gaufrette');
    $this->addOption('validated_file_class', 'sfGaufretteValidatedFile');

    parent::configure($options, $messages);

    $this->setOption('path', $this->getOption('gaufrette'));
  }
} // END OF PluginSfGaufretteFileValidator

