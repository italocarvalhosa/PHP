﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Biblioteca
{
    public class Pessoa
    {
        public string nome;
        public string email;
        public string telefone;

        public void cadastrar()
        {
            Console.WriteLine("Digite seu nome:");
            nome = Console.ReadLine();
            Console.WriteLine("Digite seu email");
            email = Console.ReadLine();
            Console.WriteLine("Digite seu telefone");
            telefone = Console.ReadLine();
        }

        public void exibir()
        {
            Console.WriteLine("Nome: {0}\n Email: {1} \n Telefone:{2}\n",this.nome, this.email,this.telefone);
        }

    }
}
