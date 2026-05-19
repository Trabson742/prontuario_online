# 🏥 MedManager - Sistema de Gestão Clínica

O **MedManager** é uma aplicação Fullstack desenvolvida para simular a operação do dia a dia de uma clínica médica. O sistema gerencia desde o fluxo de agendamento de consultas pela recepção até o atendimento médico e histórico do paciente, garantindo segurança de dados através de níveis de acesso (ACL).

Este projeto foi construído utilizando a metodologia **TDD (Test-Driven Development)** para garantir a estabilidade das regras de negócio.

## 🚀 Funcionalidades Principais

### 🔒 Níveis de Acesso (Roles & Permissions)
- **Administrador/Recepção:** Cadastro de pacientes, médicos, medicamentos e gerenciamento da agenda geral.
- **Médico:** Acesso aos prontuários dos seus pacientes, emissão de receitas digitais e registro de evolução clínica.
- **Paciente:** Visualização do seu próprio histórico, download de receitas e solicitação de agendamento.

### ⚡ Recursos Reativos (Livewire)
- **Agenda Inteligente:** Filtro de médicos e horários disponíveis em tempo real sem *page refresh*.
- **Prontuário Dinâmico:** Atualização instantânea do histórico médico durante a consulta.
- **Centro de Suporte:** Mini sistema de tickets interno para comunicação direta entre Paciente e Recepção.

## 🛠️ Stack Técnica
- **Core:** PHP 8.3 & Laravel 11
- **Frontend Interativo:** Laravel Livewire v3 & TailwindCSS
- **Ambiente de Dev:** Laravel Sail (Docker)
- **Banco de Dados:** MySQL
- **Suíte de Testes:** Pest PHP (Testes de Integração e Unitários)

## 🧪 Cobertura de Testes (Exemplos Implementados)
- `it('denies patient from viewing another patient medical record')`
- `it('allows doctor to prescribe medication')`
- `it('validates available slots before creating an appointment')`
