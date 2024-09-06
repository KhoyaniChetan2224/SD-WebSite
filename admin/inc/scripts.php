<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script>
    function alert(type, msg){
       let bs_class = (type == 'success')  ? 'alert-success' : 'alert-danger';
       let element = document.createElement('div');
       element.innerHTML = `
            <div class="alert ${$bs_class} alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3"> ${msg} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
       `;
       document.body.append(element);
    }
</script>