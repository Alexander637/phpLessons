<?php


namespace Documentor\Service;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigRender implements RenderInterface
{
    private $twig;

    private $reportsDir;

    public function __construct(string $templatesDir, string $reportsDir)
    {
        $loader = new FilesystemLoader($templatesDir);
        $this->twig = new Environment($loader, [
            'debug' => true
        ]);
        $this->reportsDir = $reportsDir;
    }
    /**
     * Render report data.
     *
     * @return string
     */
    public function render(array $data)
    {
        if(!file_exists($this->reportsDir)) {
            mkdir($this->reportsDir);
        }
        if(!file_exists($this->reportsDir . '/formatHTML')) {
            mkdir($this->reportsDir . '/formatHTML');
        }
        if(!file_exists($this->reportsDir . '/formatJSON')) {
            mkdir($this->reportsDir . '/formatJSON');
        }
        $html = $this->twig->render('report.html.twig', $data);
        file_put_contents($this->reportsDir . '/formatHTML/' . time(). '.html', $html);

        file_put_contents($this->reportsDir . '/formatJSON/' .time(). '.json', json_encode($data));
    }

}