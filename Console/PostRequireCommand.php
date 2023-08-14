<?php
namespace Paguelofacil\Gateway\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PostRequireCommand extends Command
{
    protected function configure()
    {
        $this->setName('paguelofacil:postrequire')
             ->setDescription('Cleanup tasks after composer require');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $directoryToDelete = 'vendor/paguelofacil-gateway';
        deleteDirectory($directoryToDelete);
        $output->writeln('Cleanup after composer require completed.');
    }

    function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        return;
    }

    $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $filePath = $dir . '/' . $file;
                if (is_dir($filePath)) {
                    deleteDirectory($filePath);
                } else {
                    unlink($filePath);
                }
            }
        }

    rmdir($dir);
    }

    

}
