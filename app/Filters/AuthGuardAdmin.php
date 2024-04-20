<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuardAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('logeado'))
        {
            session()->setFlashdata('msg', 'Sesion vencida');
            return redirect()
                ->to('/login');
        }
        if (session()->get('role') != 'Administrador')
        {
            session()->setFlashdata('no_access', 'Sin acceso a este modulo');
            return redirect()
                ->to('/');
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}