USE [ChatDatabase]
GO
/****** Object:  Table [dbo].[Conversation]    Script Date: 11/17/2020 8:29:16 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Conversation](
	[ConversationID] [int] IDENTITY(1,1) NOT NULL,
	[User_One_Id] [int] NOT NULL,
	[User_Two_Id] [int] NOT NULL,
 CONSTRAINT [PK_Conversation] PRIMARY KEY CLUSTERED 
(
	[ConversationID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Message]    Script Date: 11/17/2020 8:29:16 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Message](
	[Message_Text] [text] NULL,
	[User_Id] [int] NULL,
	[Conversation_Id] [int] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[User]    Script Date: 11/17/2020 8:29:16 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[User](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[UserName] [varchar](50) NOT NULL,
	[Password] [varchar](50) NOT NULL,
 CONSTRAINT [PK_User] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[User_Has_Conversation]    Script Date: 11/17/2020 8:29:16 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[User_Has_Conversation](
	[User_Id] [int] NOT NULL,
	[Conversation_Id] [int] NOT NULL
) ON [PRIMARY]

GO
ALTER TABLE [dbo].[Message]  WITH CHECK ADD  CONSTRAINT [FK_Message_Conversation] FOREIGN KEY([Conversation_Id])
REFERENCES [dbo].[Conversation] ([ConversationID])
GO
ALTER TABLE [dbo].[Message] CHECK CONSTRAINT [FK_Message_Conversation]
GO
ALTER TABLE [dbo].[User_Has_Conversation]  WITH CHECK ADD  CONSTRAINT [FK_User_Has_Conversation_Conversation] FOREIGN KEY([Conversation_Id])
REFERENCES [dbo].[Conversation] ([ConversationID])
GO
ALTER TABLE [dbo].[User_Has_Conversation] CHECK CONSTRAINT [FK_User_Has_Conversation_Conversation]
GO
ALTER TABLE [dbo].[User_Has_Conversation]  WITH CHECK ADD  CONSTRAINT [FK_User_Has_Conversation_Conversation1] FOREIGN KEY([Conversation_Id])
REFERENCES [dbo].[Conversation] ([ConversationID])
GO
ALTER TABLE [dbo].[User_Has_Conversation] CHECK CONSTRAINT [FK_User_Has_Conversation_Conversation1]
GO
ALTER TABLE [dbo].[User_Has_Conversation]  WITH CHECK ADD  CONSTRAINT [FK_User_Has_Conversation_User] FOREIGN KEY([User_Id])
REFERENCES [dbo].[User] ([ID])
GO
ALTER TABLE [dbo].[User_Has_Conversation] CHECK CONSTRAINT [FK_User_Has_Conversation_User]
GO
