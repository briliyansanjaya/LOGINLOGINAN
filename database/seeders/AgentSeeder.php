<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::factory()->create([
            'agent_name' => 'ASTRA',
            'agent_desc' => "Ghanaian Agent Astra harnesses the energies of the cosmos to reshape battlefields to her whim. With full command of her astral form and a talent for deep strategic foresight, she's always eons ahead of her enemy's next move.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/astra_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'BREACH',
            'agent_desc' => "The bionic Swede Breach fires powerful, targeted kinetic blasts to aggressively clear a path through enemy ground. The damage and disruption he inflicts ensures no fight is ever fair.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/breach_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'HARBOR',
            'agent_desc' => "Hailing from India’s coast, Harbor storms the field wielding ancient technology with dominion over water. He unleashes frothing rapids and crushing waves to shield his allies and to pummel those that oppose him.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/harbor_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'BRIMSTONE',
            'agent_desc' => "Joining from the USA, Brimstone's orbital arsenal ensures his squad always has the advantage. His ability to deliver utility precisely and safely make him the unmatched boots-on-the-ground commander.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/brimstone_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'CHAMBER',
            'agent_desc' => "Well dressed and well armed, French weapons designer Chamber expels aggressors with deadly precision. He leverages his custom arsenal to hold the line and pick off enemies from afar, with a contingency built for every plan.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/chamber_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'CYPHER',
            'agent_desc' => "The Moroccan information broker, Cypher is a one-man surveillance network who keeps tabs on the enemy's every move. No secret is safe. No maneuver goes unseen. Cypher is always watching.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/cypher_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'REYNA',
            'agent_desc' => "Forged in the heart of Mexico, Reyna dominates single combat, popping off with each kill she scores. Her capability is only limited by her raw skill, making her sharply dependant on performance.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/reyna_portrait.png'
        ]);

        Agent::factory()->create([
            'agent_name' => 'JETT',
            'agent_desc' => "Representing her home country of South Korea, Jett's agile and evasive fighting style lets her take risks no one else can. She runs circles around every skirmish, cutting enemies up before they even know what hit them.",
            'agent_pict' => 'https://trackercdn.com/cdn/tracker.gg/valorant/db/agents/jett_portrait.png'
        ]);
    }
}
