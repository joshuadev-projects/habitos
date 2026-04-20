
<h1>
    Welcome to the Home
</h1>

<p>
    olá {{ $name }} 
</p>

<p>
    Seus hábitos são:

    <ul>
        @foreach($habits as $item)
            <li>
            
                {{ $item }}
            
            </li>
            
        @endforeach
            

    </ul>
</p>

@auth('admin')
        <p>
            Você está logado!
        </p>
@endauth

@guest 

        <p>
            Você não está logado!
        </p>
    
@endguest