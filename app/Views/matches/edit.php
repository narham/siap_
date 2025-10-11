<h1>Edit Match</h1>
<form action="/matches/<?= $match['id'] ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <label>Home Team: <input type="text" name="home_team" value="<?= esc($match['home_team']) ?>"></label><br>
    <label>Away Team: <input type="text" name="away_team" value="<?= esc($match['away_team']) ?>"></label><br>
    <label>Date: <input type="datetime-local" name="match_date" value="<?= esc(str_replace(' ', 'T', $match['match_date'])) ?>"></label><br>
    <label>Location: <input type="text" name="location" value="<?= esc($match['location']) ?>"></label><br>
    <label>Home Score: <input type="number" name="home_score" value="<?= esc($match['home_score']) ?>"></label><br>
    <label>Away Score: <input type="number" name="away_score" value="<?= esc($match['away_score']) ?>"></label><br>
    <button type="submit">Update</button>
</form>
