<?php

class BookController extends Controller
{
    public function actionIndex()
	{
        $model = new Book;
        $model -> title = 'Война и мир';
        $model -> title = 'Л. Толстой';
        $model -> save(false);
		echo 'master';
	}
}
