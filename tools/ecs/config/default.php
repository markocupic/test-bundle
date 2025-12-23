<?php

declare(strict_types=1);

use Contao\EasyCodingStandard\Set\SetList;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return ECSConfig::configure()
	->withSets([SetList::CONTAO])
	->withPaths([
		__DIR__ . '/../../src',
	])
	->withSkip([
		\Contao\EasyCodingStandard\Fixer\CommentLengthFixer::class          => ['*.php'],
		\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class  => [
			'*/DependencyInjection/Configuration.php',
		],
	])
	->withRootFiles()
	->withParallel()
	->withSpacing(Option::INDENTATION_SPACES, "\n")
	->withConfiguredRule(HeaderCommentFixer::class, [
        'header' => "This file is part of Test Bundle.\n\n(c) Marko Cupic &lt;m.cupic@gmx.ch&gt;\n@license GPL-3.0-or-later\nFor the full copyright and license information,\nplease view the LICENSE file that was distributed with this source code.\n@link https://github.com/markocupic/test-bundle",
	])
	->withCache(sys_get_temp_dir() . '/ecs/markocupic/test-bundle');
