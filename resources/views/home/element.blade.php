@extends ('layouts.master')

@section ('content')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-2">
                <visible when-hidden="#title">
                    <a href="#" class="btn btn-lg btn-success" id="create">New Post</a>
                </visible>
                <a href="#" class="btn btn-lg btn-success" id="create">New Post</a>
            </div>

            <div class="col-md-8">
                <h1 class="mb-5" id="title">Show an Element When Another is Hidden</h1>

                <div class="mt-4 card card-default">
                    <div class="card-header">
                        Card Header
                    </div>

                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi autem corporis dolor, dolorum eaque eius ex expedita fuga iure laboriosam magnam natus nesciunt numquam qui saepe totam.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
