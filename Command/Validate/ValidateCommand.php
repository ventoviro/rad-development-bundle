<?php
/**
 * Part of rad project.
 *
 * @copyright  Copyright (C) 2017 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace DevelopmentBundle\Command\Validate;

use DevelopmentBundle\Command\Validate\Constant\ConstantCommand;
use DevelopmentBundle\Command\Validate\Gpl\GplCommand;
use DevelopmentBundle\Command\Validate\Indexmaker\IndexmakerCommand;
use Windwalker\Console\Command\Command;

/**
 * The CheckCommand class.
 *
 * @since  __DEPLOY_VERSION__
 */
class ValidateCommand extends Command
{
	/**
	 * An enabled flag.
	 *
	 * @var bool
	 */
	public static $isEnabled = true;

	/**
	 * Console(Argument) name.
	 *
	 * @var  string
	 */
	protected $name = 'validate';

	/**
	 * The command description.
	 *
	 * @var  string
	 */
	protected $description = 'Some useful checkers';

	/**
	 * The usage to tell user how to use this command.
	 *
	 * @var string
	 */
	protected $usage = 'validate <cmd><command></cmd> <option>[option]</option>';

	/**
	 * Initialise command information.
	 *
	 * @return void
	 */
	public function initialise()
	{
		parent::initialise();

		$this->addCommand(new IndexmakerCommand);
		$this->addCommand(new ConstantCommand);
		$this->addCommand(new GplCommand);
	}

	/**
	 * Execute this command.
	 *
	 * @return int|void
	 */
	protected function doExecute()
	{
		parent::doExecute();
	}
}
