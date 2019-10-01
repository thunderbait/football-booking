<form>
  <div class="form-group">
    <h2>Pitch Booking - {{$pitch->name}}</h2>
    <h2>Size : {{$pitch->size}}</h2>
    <h2>LOcation : {{$pitch->location}}</h2>
    <h2>Type: {{$pitch->type}}</h2>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree to the Terms & Conditions</label>
  </div>
  <button type="submit" class="btn btn-primary">Pay Now</button>  <!-- paid for = 1 -->
  <button type="submit" class="btn btn-primary">Pay Later</button> <!-- Paid for = 0 -->
</form>