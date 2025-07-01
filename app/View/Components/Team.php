<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Team extends Component
{
    public $lead;
    public $treasurer;
    public $leadsSection;
    public $membersSection;

    public function __construct()
    {
        $teamData = [
            [ "role" => "Lead", "name" => "Unknown", "image" => "firza.jpg" ],
            [ "role" => "Treasurer", "name" => "Siti Ardiyani", "image" => "firza.jpg" ],
            [ "role" => "Community Management Lead", "name" => "Prayoga Sungkowo", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative Lead", "name" => "Soni Armanda", "image" => "kuda.jpg" ],
            [ "role" => "Research & Development Lead", "name" => "Rifqi Yafik", "image" => "firza.jpg" ],
            [ "role" => "Event & Planning Lead", "name" => "Irtanti Carona", "image" => "kuda.jpg" ],
            [ "role" => "Community Management", "name" => "Arif Kurniawan", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative Lead", "name" => "Rizky Azmi Fadhillah", "image" => "kuda.jpg" ],
            [ "role" => "Research & Development", "name" => "Amalia Putri", "image" => "firza.jpg" ],
            [ "role" => "Member", "name" => "Fadli Satria", "image" => "kuda.jpg" ],
            [ "role" => "Community Management", "name" => "Siti Ardiyani", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative", "name" => "Annisa Rahmadini", "image" => "firza.jpg" ],
            [ "role" => "Research & Development", "name" => "Muammar Farhan", "image" => "firza.jpg" ],
            [ "role" => "Member", "name" => "Fanniesa Ramadhan", "image" => "firza.jpg" ],
            [ "role" => "Community Management", "name" => "Riko Zaki Santoso", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative", "name" => "Rizal Khair Siregar", "image" => "firza.jpg" ],
            [ "role" => "Research & Development", "name" => "Anggi Muammar Hanafi", "image" => "firza.jpg" ],
            [ "role" => "Member", "name" => "Ghaniyyir Rahman", "image" => "firza.jpg" ],
            [ "role" => "Community Management", "name" => "Gatot Triantono", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative", "name" => "Hanna", "image" => "firza.jpg" ],
            [ "role" => "Research & Development", "name" => "Firza Hakim", "image" => "firza.jpg" ],
            [ "role" => "Member", "name" => "Irtanti Carona", "image" => "firza.jpg" ],
            [ "role" => "Community Management", "name" => "Fahri Kurniawan", "image" => "firza.jpg" ],
            [ "role" => "Media & Creative", "name" => "Hafizh Naufal", "image" => "firza.jpg" ],
            [ "role" => "Research & Development", "name" => "Ahmad Al Qodri", "image" => "firza.jpg" ],
            [ "role" => "Member", "name" => "Irtanti Carona", "image" => "firza.jpg" ],
        ];

        $this->lead = $teamData[0];
        $this->treasurer = $teamData[1];
        $this->leadsSection = array_slice($teamData, 2, 4); // 4 lead pertama
        $this->membersSection = array_slice($teamData, 6); // sisanya
    }

    public function render()
    {
        return view('components.team');
    }
}
