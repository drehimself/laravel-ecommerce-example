<?php

namespace App\Admin\Controllers;

use App\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('author_id', __('Author id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('title', __('Title'));
        $grid->column('seo_title', __('Seo title'));
        $grid->column('excerpt', __('Excerpt'));
        $grid->column('body', __('Body'));
        $grid->column('image', __('Image'));
        $grid->column('slug', __('Slug'));
        $grid->column('meta_description', __('Meta description'));
        $grid->column('meta_keywords', __('Meta keywords'));
        $grid->column('status', __('Status'));
        $grid->column('featured', __('Featured'));
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('author_id', __('Author id'));
        $show->field('category_id', __('Category id'));
        $show->field('title', __('Title'));
        $show->field('seo_title', __('Seo title'));
        $show->field('excerpt', __('Excerpt'));
        $show->field('body', __('Body'));
        $show->field('image', __('Image'));
        $show->field('slug', __('Slug'));
        $show->field('meta_description', __('Meta description'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('status', __('Status'));
        $show->field('featured', __('Featured'));
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
        $form = new Form(new Post());

        $form->number('author_id', __('Author id'));
        $form->number('category_id', __('Category id'));
        $form->text('title', __('Title'));
        $form->text('seo_title', __('Seo title'));
        $form->textarea('excerpt', __('Excerpt'));
        $form->textarea('body', __('Body'));
        $form->image('image', __('Image'));
        $form->text('slug', __('Slug'));
        $form->textarea('meta_description', __('Meta description'));
        $form->textarea('meta_keywords', __('Meta keywords'));
        $form->text('status', __('Status'))->default('DRAFT');
        $form->switch('featured', __('Featured'));

        return $form;
    }
}
