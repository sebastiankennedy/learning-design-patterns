<?php
namespace StructuralDesignPatterns\Facade\HeadFirst;

class HomeTheaterFacade
{
    public $amp;
    public $tuner;
    public $dvd;
    public $cd;
    public $projector;
    public $lights;
    public $screen;
    public $popper;

    public function __construct(
        Amp $amp,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        TheaterLight $lights,
        Screen $screen,
        PopcornPopper $popper
    )
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie) : void
    {
        echo "Get ready to watch a movie...\n";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd();
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie() : void
    {
        echo "Shutting movie theater down...\n";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}
