USE [crudphpsql]
GO

/****** Object:  Table [dbo].[tasks]    Script Date: 12/11/2023 01:56:34 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[tasks](
	[id] [int] NOT NULL IDENTITY(1,1),
	[title] [varchar](100) NULL,
	[description] [varchar](250) NULL,
	[status] [varchar](50) NULL,
 CONSTRAINT [PK_task] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
