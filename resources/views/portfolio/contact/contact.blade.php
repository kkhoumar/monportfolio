
<div class="col-lg-6 col-md-6 col-12">
    <form action="{{url('ContactMOI')}}" method="post" class="contact-form webform"  role="form">
      {{ csrf_field() }}
      @method('POST')

        <div class="form-group d-flex flex-column-reverse">
            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name">
            <label for="cf-name" class="webform-label">le nom complet</label>
            @error('name')
              <div class="alert alert-danger">{{$message}}</div>
           @enderror
        </div>

        <div class="form-group d-flex flex-column-reverse">
            <input type="email" class="form-control  @error('email') is-invalid  @enderror" name="email" id="email" placeholder="Your Email">

            <label for="cf-email" class="webform-label">votre Email</label>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
         @enderror
        </div>

        <div class="form-group d-flex flex-column-reverse">
            <textarea class="form-control  @error('message') is-invalid @enderror" rows="5" name="message" id="message" placeholder="Your Message"></textarea>

            <label for="cf-message" class="webform-label">Message</label>
            <span id="errors"></span>
            @error('message')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
           </div>

        <button type="submit" class="form-control" disabled  id="submit-button" name="submit">envoyer</button>
    </form>
  </div>

  <script>
        let submitbutton = document.getElementById("submit-button");
        let inputname = document.getElementById("name");
        let inputemail = document.getElementById("email");
        let inputmessage = document.getElementById("message");

        inputname.addEventListener,inputemail.addEventListener,inputmessage.addEventListener("keyup", (e) =>{
            let value = e.currentTarget.value;

            if(value.trim() === ""){
                submitbutton.disabled =true;
                let errors = document.getElementById("error");
                errors.innerHTML = "les champs sont requis";

            }else{
            submitbutton.disabled =false;
            submitbutton.style.backgroundColor = 'green';
            submitbutton.style.color = 'white';

            }

        });


  </script>

