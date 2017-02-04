<?php

class BookController extends Controller
{
    public function actionIndex()
	{
		$model = new Book;
        $model -> title = 'Война и мир';
        $model -> description = 'Л. Толстой';
        $model -> save();
        echo 2;
	}
}
