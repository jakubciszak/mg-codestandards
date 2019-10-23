<?php

namespace MG1\Sniffs\Classes;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

class ClassFileNameSniff implements Sniff
{

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return [
            T_CLASS,
            T_INTERFACE,
            T_TRAIT,
        ];
    }

    /**rocesses this test, when one of its tokens is encountered.
     * P
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
     * @param int $stackPtr The position of the current token in the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $fullPath = basename($phpcsFile->getFilename());
        $fileName = substr($fullPath, 0, strrpos($fullPath, '.'));
        if ($fileName === '') {
            return;
        }

        $tokens = $phpcsFile->getTokens();
        $decName = $phpcsFile->findNext(T_STRING, $stackPtr);
        $exceptedName = $this->getExceptedName($phpcsFile);
        if ($exceptedName !== $tokens[$decName]['content']) {
            $error = '%s name should be valid with file module path ' . PHP_EOL
                . 'Your name: %s' . PHP_EOL
                . 'Excepted name: %s';
            $data = [
                ucfirst($tokens[$stackPtr]['content']),
                $tokens[$decName]['content'],
                $exceptedName
            ];
            $phpcsFile->addError($error, $stackPtr, 'NoMatch', $data);
        }
    }

    /**
     * @param \PHP_CodeSniffer\Files\File $phpcsFile
     * @return string
     */
    private function getExceptedName($phpcsFile)
    {
        $split = preg_split('/app\/code\/(local|community|core)\//', $phpcsFile->getFilename());
        $pathInfo = pathinfo($phpcsFile->getFilename());
        $modulePath = $split[1];
        $exceptedName = str_replace(['/', '.' . $pathInfo['extension']], ['_', ''], $modulePath);
        if (strpos($modulePath, 'controllers') !== false) {
            $exceptedName = str_replace('_controllers', '', $exceptedName);
        }
        return $exceptedName;
    }
}
