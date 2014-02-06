@extends('layout')

@section('content')
        {{ HTML::style('/css/bootstrap.css') }}
        {{ HTML::style('/css/jqueryFileTree.css') }}
        {{ HTML::style('/css/jquery.contextMenu.css') }}
        {{ HTML::style('css/editor.css') }}
        {{ HTML::script('/js/jquery-1.10.2.js') }}
        {{ HTML::script('/js/jqueryFileTree.js') }}
        {{ HTML::script('/js/jquery.ui.position.js') }}
        {{ HTML::script('/js/jquery.contextMenu.js') }}
        {{ HTML::script('/js/bootstrap.js') }}
		<body>
			<div id="topLeft">
				<img src="{{ URL::to('/css/images/logo.png') }}" class="img-responsive">
				<!-- should make logo responsive to its parent container (topLeft)-->
			</div>
			<div id="header">
				<h1 style="color:#FFFFFF; text-align: center; padding-top:20px;">{{ $project }}</h1>
				<h4 style="color:#FFFFFF; text-align: center; padding-top:10px;">{{ $user }}</h4>
			</div>
			<div id="topRight">
					<ul class="nav nav-pills-square nav-stacked">
						<li><a href="#">My Projects</a></li>
						<li><a href="https://github.com/" target="blank">GitHub</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
			</div>
			<div id="filesystem">
				<!-- Div Section for Mike's Code -->
			</div>
			<div id="editor">
				<!-- Div Section for Xiao's Code -->
			</div>
			<div id="optionSideBar">
				<div class="panel panel-default">
				  <div class="panel-body">
					<h4>File Options</h4>
					<button class="btn btn-lg btn-file btn-block" type="button">Save</button>
					<hr/>
					<h4>Project Options</h4>
					<button class="btn btn-lg btn-project btn-block" type="button">Commit</button>
					<button class="btn btn-lg btn-project btn-block" type="button">Push</button>
				  </div>
				</div>
			</div>
            @include('modals')
            {{ HTML::script('/js/filesystem.js') }}
            <script>
                $(document).ready( function() {
                    $('#filesystem').fileTree({ script: '{{URL::action('FileController@indexPost')}}' }, function(file) {
                        alert(file);
                    });
                })

                /* ********************
                 * Filesystem actions.
                 **********************/

                /**
                 * Move a file/directory to a target directory.
                 *
                 * @param {string} source       File/directory path.
                 * @param {string} destination  Directory path.
                 */
                function fsMv(source, destination) {
                    if (source == destination) { return; }
                    console.log('Moving ' + source + ' to ' + destination);
                }

                /**
                 * Copy a file/directory to a target directory.
                 *
                 * @param {string} source       File/directory path.
                 * @param {string} destination  Directory path.
                 */
                function fsCp(source, destination) {
                    if (source == destination) { return; }
                    console.log('Copying ' + source + ' to ' + destination);
                }

                /**
                 * Create a directory at the given path.
                 *
                 * @param {string} path Path of directory to create.
                 */
                function fsMkdir(path) {
                    console.log('Creating ' + path);
                }

                /**
                 * Create a file at the given path.
                 *
                 * @param {string} path Path of file to create.
                 */
                function fsTouch(path) {
                    console.log('Creating ' + path);
                }

                /**
                 * Remove a file at the given path.
                 *
                 * @param {string} path Path of file to delete.
                 */
                function fsRm(path) {
                    console.log('Removing ' + path);
                }

                /**
                 * Remove a directory at the given path.
                 *
                 * @param {string} path Path of directory to delete.
                 */
                function fsRmdir(path) {
                    console.log('Removing ' + path);
                }


            </script>
		</body>
@endsection
