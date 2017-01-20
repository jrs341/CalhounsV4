@extends('layout')

@section('title')
Reservation
@stop

@section('content')
<div>

  <form action="#">
    <p>Would you like to reserve a cabin or an RV space?
    </br>
      <input type="checkbox" id="rvSpace" />
      <label for="rvSpace">RV Space</label>
    </p>
    <p>
      <input type="checkbox" id="cabin" />
      <label for="cabin">Cabin</label>
    </p>
  </form>
  <div id="app">
        <anyPets></anyPets>
  </div>

  <div id="test">
  </div>

  <form action="#">
    <p>How would you like to rent the cabin or RV space?
    </br>
      <input type="checkbox" id="daily" />
      <label for="daily">Nightly</label>
    </p>
    <p>
      <input type="checkbox" id="weekly" />
      <label for="weekly">Weekly</label>
    </p>
    <p>
      <input type="checkbox" id="monthly" />
      <label for="monthly">Monthly</label>
  </form>
  <form action="#">
  <div class="input-field col s4 m2">
    <select>
      <option value="" disabled selected>Choose number of adults</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <label>How many adults per cabin or RV space over 18 are in your group?</label>
  </div>
  <div class="input-field col s4 m2">
    <select>
      <option value="" disabled selected>Choose number of children</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <label>How many children per cabin or RV space are in your group?</label>
  </div>
  </form>
  <form action="#">
    <p>Will any pets be staying with you?
    </br>
      <input type="checkbox" id="petYes" />
      <label for="petYes">Yes</label>
    </p>
    <p>
      <input type="checkbox" id="petNo" />
      <label for="petNo">No</label>
    </p>
  </form>
  <form action="#">
  <div class="input-field col s4 m2">
    <select>
      <option value="" disabled selected>Choose a breed</option>
      <option>Pit Bull Terriers</option>
	  <option>Staffordshire Terriers</option>
	  <option>Rottweilers</option>
	  <option>German Shepherds</option>
	  <option>Presa Canarios</option>
	  <option>Chows Chows</option>
	  <option>Doberman Pinschers</option>
	  <option>Akitas</option>
	  <option>Wolf-hybrids</option>
	  <option>Mastiffs</option>
	  <option>Cane Corsos</option>
	  <option>Alaskan Malamutes</option>
	  <option>Siberian Huskies</option>
	  <option>Other</option>
    </select>
    <label>Are any of the dogs pure bred or mixed with any of the following breeds?</label>
  </div>
  </form>
  <form action="#">
  <input type="date" class="datepicker">
  </form>
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>
@stop