-- Se a VM não for usado, segue abaixo o CREATE DATABASE
-- CREATE DATABASE testebdr;
-- USE testebdr;

CREATE TABLE tarefas(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    prioridade INT(11) DEFAULT 0
);

INSERT INTO tarefas (titulo, descricao, prioridade) VALUES
    ('Primeira tarefa', 'Tarefa com prioridade alta', 9),
    ('Segunda tarefa', 'Prioridade baixa', 1),
    ('Terceira tarefa', 'Prioridade 3', 3),
    ('Quarta tarefa', '', 2),
    ('Quinta tarefa', 'Prioridade 10', 10),
    ('Sexta tarefa', '', 1);
