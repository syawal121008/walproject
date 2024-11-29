<div class="container">
    <h1>Form User</h1>
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <form action="{{ route('user.update', $dataEdituser->user_id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT"/>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $dataEdituser->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $dataEdituser->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" value="">
                <span class="input-group-text" onclick="togglePassword()">
                    <i id="eyeIcon" class="fa fa-eye"></i>
                </span>
            </div>
         </div>

        <div class="role-options">
            <label>Role</label><br>
         </div>
 
          <label><input type="radio" name="role" value="admin" {{ ($dataEdituser->role == "admin") ? "checked" : "" }}> Admin</label>
            <label><input type="radio" name="role" value="cashier" {{ ($dataEdituser->role == "cashier") ? "checked" : "" }}> Cashier</label>
         <button type="submit">Save</button>
    </form>
</div>

<script>
function togglePassword() {
    var passwordField = document.getElementById("password");
    var eyeIcon = document.getElementById("eyeIcon");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>
