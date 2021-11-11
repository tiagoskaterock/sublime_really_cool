<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Título</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at maximus libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur tempus velit, a tincidunt ligula ultricies vitae. Mauris vel rutrum sapien. Suspendisse ultricies dictum fringilla. Curabitur non posuere urna, ac lobortis lacus. Aliquam ac laoreet felis. Etiam nunc erat, mattis vitae volutpat in, volutpat vitae magna. Pellentesque quis libero vitae turpis feugiat mattis a ut urna. Etiam gravida tellus erat, eget placerat velit aliquam a. Phasellus sed erat sodales nisl consequat sollicitudin. Nunc tempus diam nulla, a ornare lectus venenatis ultrices. Praesent id metus id lacus posuere volutpat vel a turpis. In dapibus lorem nisi, eu rhoncus augue sollicitudin gravida. Phasellus vitae tortor tincidunt, iaculis diam a, luctus purus. Nullam ut libero eu arcu finibus tristique vitae eu nulla.
  </p>
  
  <p>
    Pellentesque venenatis a nisl quis consequat. Praesent pretium pulvinar dui, sed malesuada ante ultricies in. Phasellus ornare mi ac efficitur tincidunt. Morbi lacinia ut est ac ultrices. Aenean nec neque ut massa posuere vehicula eget eget nibh. Fusce nec ex sed erat convallis euismod. Pellentesque gravida convallis erat quis interdum.
  </p>
  
  <p>
    hasellus facilisis leo eu vulputate fringilla. Ut erat lectus, vestibulum sed tortor vel, vulputate euismod arcu. Suspendisse vitae metus vehicula, auctor nibh consequat, auctor enim. Vivamus congue ac quam sed dapibus. In eros diam, consectetur eu ultricies ut, dignissim eget odio. Aenean ante mauris, aliquam sit amet orci ac, auctor ultricies eros. Donec lectus urna, tempus sit amet porta a, ullamcorper eget nunc. Etiam eu rutrum turpis, sed tempor eros. Nunc tempus ullamcorper ultrices. Phasellus luctus iaculis arcu. Phasellus dictum odio magna, sit amet mattis odio dapibus in. Sed odio turpis, sagittis quis finibus sollicitudin, blandit eget nisl.
  </p>
  
  <p>
    Nulla pharetra euismod lacus nec pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ac nibh ac metus efficitur pellentesque. Aliquam et egestas erat. Nulla lacus velit, facilisis in accumsan ut, tempor quis dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin ut nunc ipsum.
  </p>
  
  <p>
    Praesent imperdiet, lectus vitae accumsan vehicula, neque mi aliquet nisl, id tempus enim erat non massa. Integer iaculis lorem risus, et bibendum elit rhoncus ac. Etiam congue sapien eu urna egestas dictum nec sed ipsum. Fusce rhoncus in ex at rhoncus. Proin dapibus lacus ac nunc imperdiet lobortis. Quisque a elit ut turpis mattis ultricies. Etiam vel diam vel orci commodo suscipit nec eget ante. Maecenas varius blandit consectetur. Praesent quis finibus velit. Sed non eros consectetur, tincidunt nisi ac, consequat lectus. Vestibulum ullamcorper aliquam tortor, in porta leo pretium ut. Mauris eleifend elit vitae eros malesuada mollis. Phasellus vehicula lacus dui, eu venenatis eros pharetra vitae. Pellentesque interdum lacus a quam venenatis pretium.
  </p>
      
</div>

<div class="table-responsive">
  <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">

    <thead class="bg-dark">
      <tr>
        <th>ID</th>
        <th>Título</th>

        <th>Imagem</th>
        <th>Categoria</th>
        <th>Criado por</th>
        <th>Atualizado por</th>
        <th colspan="2">Ações</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td></td>
        <td></td>

        <td>

        </td>



        <td></td>


        <td>

        </td>


        <td>

        </td>


        <td>
          <a class="btn btn-sm btn-primary" href="{{ route('admin.produtos.editar', ->id) }}" title="Clique para editar o produto {{ ->titulo }}">
            <i class="fas fa-edit"></i>
            Editar
          </a>
        </td>
           

        <button class="btn btn-danger btn-sm" type="submit" name="submit" value="Excluir" title="Clique para excluir" data-toggle="modal" data-target="#modal_excluir">
          <i class="fas fa-trash-alt"></i>
          Excluir
        </button>
            

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
          
        
      </tr>

    </tbody>

  </table>

</div>
    <a class="btn btn-success" type="submit" href="#" title="Clique para criar um novo">
      <i class="fas fa-plus"></i>
      Criar Novo
    </a>
        

        <a class="btn btn-sm btn-primary" href="#" title="Clique para editar">
          <i class="fas fa-edit"></i>
          Editar
        </a>
            

            <button class="btn btn-danger btn-sm" type="submit" name="submit" value="Excluir" title="Clique para excluir" data-toggle="modal" data-target="#modal_excluir">
              <i class="fas fa-trash-alt"></i>
              Excluir
            </button>
                

<footer>
  
</footer>

</body>
</html>
