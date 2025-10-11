<h1>Match Details</h1>
<p>ID: <?= esc($match['id']) ?></p>
<p>Home Team: <?= esc($match['home_team']) ?></p>
<p>Away Team: <?= esc($match['away_team']) ?></p>
<p>Date: <?= esc($match['match_date']) ?></p>
<p>Location: <?= esc($match['location']) ?></p>
<p>Score: <?= esc($match['home_score']) ?> - <?= esc($match['away_score']) ?></p>
<a href="/matches">Back to list</a>
