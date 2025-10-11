<h1>Add Match</h1>
<form action="/matches" method="post">
    <label>Home Team: <input type="text" name="home_team"></label><br>
    <label>Away Team: <input type="text" name="away_team"></label><br>
    <label>Date: <input type="datetime-local" name="match_date"></label><br>
    <label>Location: <input type="text" name="location"></label><br>
    <label>Home Score: <input type="number" name="home_score"></label><br>
    <label>Away Score: <input type="number" name="away_score"></label><br>
    <button type="submit">Save</button>
</form>
