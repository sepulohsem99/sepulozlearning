
@foreach($bots as $bot) 
<!--
{{$bot->name}} | {{$bot->firstname}} | {{$bot->lastname}} | {{$bot->age}}  <br/>
<form action="/bots/{{$bot->id}}" method="POST">
    @csrf
    @method('PUT')
    <input placeholder="please insert your full name" name="name" value="{{$bot->name}}"> <br/>
    <button type="submit">Kemaskini</button>
    
</form>

<form action="/bots/{{$bot->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Padam</button>
</form>

-->

<form action="/" method=POST>
    @csrf
    <input placeholder="please insert your full name" name="name"> <br/>
    <input placeholder="please insert your firstname" firstname="firstname"> <br/>
    <input placeholder="please insert your lastname" lastname ="lastname"><br/>
    <input placeholder="please insert your age " age ="age"><br/>
    <button type="submit">Hantar</button>
</form>


<label for="team">please choose a team to support:</label>

<select name="team" id="team">
  <option value="team secret">team secret</option>
  <option value="homebois">homebois</option>
  <option value="idonotsleep">idonotsleep</option>
  <option value="geekfam">geekfam</option>
  <option value="Evos legend">Evos legend</option>
</select>
<br><br>
  <input type="submit" value="submit">
</form>



