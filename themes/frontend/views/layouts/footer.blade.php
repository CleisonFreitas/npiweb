
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class=" align-items-end justify-content-between small">
                            <div class="text-muted" style="text-align:center;"> NPI Tecnologia {{date('Y')}} &copy; Todos os direitos reservados</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/mascara.js')}}"></script>

        <!-- Biblioteca Bootstrapp para Modal -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <!-- Biblioteca SweetAlert para Alertas do Sistema -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!-- DataTable
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
        -->
        
        @if (session('sucesso'))
        <script>
            Swal.fire(
        'Alerta!',
        'Requisição realizada com sucesso!',
        'success'
        )
        </script>
        @endif

        @if ($errors->any() || (session('erro'))) 
        <script>
            Swal.fire(
        'Alerta!',
        'Falha ao tentar cadastrar requisição!',
        'error'
        )
        </script>    
        @endif
    </body>
</html>