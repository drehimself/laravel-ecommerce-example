<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('slug', __('Slug'));
        $grid->column('details', __('Details'));
        $grid->column('price', __('Price'));
        $grid->column('description', __('Description'));
        $grid->column('featured', __('Featured'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('image', __('Image'));
        $grid->column('images', __('Images'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('slug', __('Slug'));
        $show->field('details', __('Details'));
        $show->field('price', __('Price'));
        $show->field('description', __('Description'));
        $show->field('featured', __('Featured'));
        $show->field('quantity', __('Quantity'));
        $show->field('image', __('Image'));
        $show->field('images', __('Images'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->text('slug', __('Slug'));
        $form->text('details', __('Details'));
        $form->number('price', __('Price'));
        $form->textarea('description', __('Description'));
        $form->switch('featured', __('Featured'));
        $form->number('quantity', __('Quantity'))->default(10);
        $form->image('image', __('Image'));
        $form->textarea('images', __('Images'));

        return $form;
    }
}
