<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('role_id', __('Role id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('password', __('Password'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('settings', __('Settings'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('role_id', __('Role id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('avatar', __('Avatar'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('settings', __('Settings'));
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
        $form = new Form(new User());

        $form->number('role_id', __('Role id'));
        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->image('avatar', __('Avatar'))->default('users/default.png');
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));
        $form->textarea('settings', __('Settings'));

        return $form;
    }
}
