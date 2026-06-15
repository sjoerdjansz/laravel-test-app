<?php

namespace App\View\Components;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BabyEventCard extends Component
{
    /**
     * Create a new component instance.
     */

//    properties

    public function __construct(
        public Event $event
    )
    {
    }

    public function formatTime(): string
    {
        $start = $this->event->start_time ?? null;
        $end = $this->event->end_time ?? null;
        $duration = $this->event->duration_minutes ?? null;

        if ($end) {
            return $duration ? "{$start} - {$end} ({$duration}m)" : "{$start} - {$end}";
        }

        return $start ?? '';
    }

    public function formatDate(): string {
        $date = $this->event->date ?? null;
        return date("M jS", strtotime($date)) ;
    }

    public function getTypeTitle(): string {
        return match ($this->event->type) {
            'diaper' => 'Diaper',
            'feed' => 'Feed',
            'sleep' => 'Sleep',
            'temperature' => 'Temperature',
            default => '',
        };
    }

    public function details(): string
    {
        return match ($this->event->type) {
            'diaper' => $this->diaperDetails(),
            'feed' => $this->feedDetails(),
            'sleep' => $this->sleepDetails(),
            'temperature' => $this->temperatureDetails(),
            default => '',
        };
    }

    private function feedDetails(): ?string
    {
        return $this->event->metadata['feed_type'] ?? null;
    }

    private function sleepDetails(): ?string
    {
        return $this->event->metadata['quality'] ?? null;
    }

    private function temperatureDetails() {
        return $this->event->metadata['value'] ?? null;
    }

    private function diaperDetails(): ?string {
        return $this->event->metadata['diaper_type'] ?? null;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.baby-event-card');
    }
}
